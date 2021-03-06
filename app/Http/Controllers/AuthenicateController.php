<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Passport\Http\Controllers\AccessTokenController;
use Laravel\Passport\TokenRepository;
use Lcobucci\JWT\Parser as JwtParser;
use League\OAuth2\Server\AuthorizationServer;
use Psr\Http\Message\ServerRequestInterface;
use App\User;
use App\League;
use App\Profile;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResource;

class AuthenicateController extends Controller
{

    protected $server;
    protected $tokens;
    protected $jwt;

    public function __construct(
        AuthorizationServer $server,
        TokenRepository $tokens,
        JwtParser $jwt
    ) {
        $this->jwt = $jwt;
        $this->server = $server;
        $this->tokens = $tokens;
    }



    public function user(Request $request)
    {
        return new UserResource($request->user());
    }


    public function register(UserRequest $request)
    {
        $user = new User;
        $profile = new Profile;
        $league = new League;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();



        $league->user_id = $user->id;
        $league->name = $request->league;
        $league->sport = "NFL Football";

        $league->save();


        $profile->user_id = $user->id;
        $profile->league_id = $league->id;
        $profile->name = $user->name;
        $profile->team = $request->team;
        $profile->wins = 0;
        $profile->loses = 0;
        $profile->ties = 0;
        $profile->points = 0;
        $profile->rank = 0;

        $profile->save();



        return new UserResource($user);
    }

    public function login(ServerRequestInterface $request)
    {

        $controller = new AccessTokenController($this->server, $this->tokens, $this->jwt);

        $request = $request->withParsedBody($request->getParsedBody() +
            [
                'grant_type' => 'password',
                'client_id' => config('services.passport.client_id'),
                'client_secret' => config('services.passport.client_secret'),
            ]);

        try {
            return with(new AccessTokenController($this->server, $this->tokens, $this->jwt))
                ->issueToken($request);
        } catch (\GuzzleHttp\Exception\BadResponseException $e) {
            if ($e->getCode() === 400) {
                return response()->json('Invalid Request. Please enter a username or a password.', $e->getCode());
            } else if ($e->getCode() === 401) {
                return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
            }
            return response()->json('Something went wrong on the server, please try again later.', $e->getCode());
        }
    }

    public function logout()
    {
        auth()->user()->tokens->each(function ($token, $key) {
            $token->delete();
        });
        return response('Logged out', 200);
    }
}
