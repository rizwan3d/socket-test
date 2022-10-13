<?php

namespace App\Auth\Services;

use App\Auth\Domain\Entities\User;
use Firebase\JWT\JWT;
use App\Auth\Repository\UserRepository;
use App\Framework\Factory\LoggerFactory;

class AuthService{

	function __construct(UserRepository $userRepository,LoggerFactory $logger) {
		$this->userRepository = $userRepository;
		$this->logger = $logger;
	}

	public function getAllUser(): ?array
	{
		$users = $this->userRepository->getUsers();
		$this->logger->info(sprintf('User created: %s', $userId));
		return $this->userRepository->getUserById(20);
	}
	// private $user;
	// public $secret = 'NOTHINGISIMPPOSBILE630';

	// public function setAuth($data){
	// 	try{
	// 		$user = User::findOrFail($data->data->user_id);
	// 		Auth::$user = $user;
	// 		return true;
	// 	}catch(\Exception $e){
	// 		return false;
	// 	}
	// }

	// public function login($user){
    //     Auth::$user = $user;
	// 	$token = [
	// 		"iat" => time(),
	// 		"exp" => time() + 2592000,
	// 		"data" => [
	// 			"user_id" => $user->id
	// 		]
	// 	];

	// 	return JWT::encode($token, Auth::$secret, 'HS256');
	// }

	// public function user(){
	// 	return Auth::$user;
	// }

	// public function hash($password){
	// 	return password_hash($password, PASSWORD_DEFAULT);
	// }

	// public function verifyPassword($user,$password){
	// 	return password_verify($password, $user->password);
	// }

}