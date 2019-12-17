<?php
/**
 * Created by: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:22 +0000
 */


namespace App\Api\V1\Controllers;


use App\Http\Resources\UserResource;
use App\Api\V1\Requests\CreateUserRequest;
use App\Api\V1\Requests\UpdateUserRequest;
use App\Services\UserService;
use App\Transformers\UserTransformer;
use Illuminate\Support\Facades\Auth;


/**
 * Class UserController
 * @package App\Api\V1\Controllers
 *
 * @property-read UserService $userService
 */
class UserController extends BaseController
{
    protected $userService;

    public function __construct() {
        $this->userService = new UserService();
    }

    public function me() {
        return new UserResource(Auth::user());
    }

    /**
     * @param UserService $service
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(UserService $service) {
        $users = $service->index();
        return UserResource::collection($users);
    }

    /**
     * @param $id
     * @param UserService $service
     * @return UserResource
     */
    public function show($id, UserService $service) {
        $user = $service->show($id);
        return new UserResource($user);
    }

    /**
     * @param CreateUserRequest $request
     * @param UserService $service
     * @return UserResource
     */
    public function store(CreateUserRequest $request, UserService $service) {
        $user = $service->store($request);
        return new UserResource($user);
    }

    /**
     * @param UpdateUserRequest $request
     * @param $id
     * @param UserService $service
     * @return UserResource
     */
    public function update(UpdateUserRequest $request, $id, UserService $service) {
        $user = $service->update($id, $request);
        return new UserResource($user);
    }

    /**
     * @param $id
     * @param UserService $service
     */
    public function destroy($id, UserService $service) {
        $service->delete($id);
    }
}
