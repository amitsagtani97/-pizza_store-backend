<?php
/**
 * UserResource: Hemant Saini
 * Date: Tue, 17 Dec 2019 04:25:22 +0000
 */

namespace App\Services;


use App\Api\V1\Exceptions\UserNotFoundException;
use App\User;
use App\Services\Contract\CreateUserContract;
use App\Services\Contract\UpdateUserContract;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{

    /**
     * @param $userId
     * @return User
     */
    public static function find($userId) {
        $user = User::find($userId);
        if (!$user) {
            throw new UserNotFoundException();
        }
        return $user;
    }

    /**
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index() {
        return User::all();
    }

    /**
     * @param $userId
     * @return User
     */
    public function show($userId) {
        return self::find($userId);
    }

    /**
     * @param CreateUserContract $contract
     * @return User
     */
    public function store(CreateUserContract $contract) {
        $user = new User();
                $user->display_name = $contract->getDisplayName();
        $user->email = $contract->getEmail();
        $user->address = $contract->getAddress();
        $user->phone_number = $contract->getPhoneNumber();

        $user->save();
        return $user;
    }

    /**
     * @param $userId
     * @param UpdateUserContract $contract
     * @return User
     */
    public function update($userId, UpdateUserContract $contract) {
        $user = self::find($userId);
                if ($contract->hasDisplayName()) {
            $user->display_name = $contract->getDisplayName();
        }
        if ($contract->hasEmail()) {
            $user->email = $contract->getEmail();
        }
        if ($contract->hasAddress()) {
            $user->address = $contract->getAddress();
        }
        if ($contract->hasPhoneNumber()) {
            $user->phone_number = $contract->getPhoneNumber();
        }

        $user->save();
        return $user;
    }

    /**
     * @param $userId
     */
    public function delete($userId) {
        $user = $this->find($userId);
        try {
            $user->delete();
        } catch (\Exception $e) {
        }
    }

    public function orders(User $user)
    {
        return $user->orders()->with('choices')->get();
    }
}
