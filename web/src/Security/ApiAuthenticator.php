<?php

namespace App\Security;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use App\Service\UserService;

class ApiAuthenticator extends AbstractGuardAuthenticator
{

    public function __construct(EntityManagerInterface $entityManager,
        UrlGeneratorInterface $urlGenerator, CsrfTokenManagerInterface $csrfTokenManager,
        SessionInterface $session, UserService $userService)
    {
        $this->userService = $userService;
    }

    public function supports(Request $request)
    {
        return $request->headers->has('X-AUTH-GC');
    }

    public function getCredentials(Request $request)
    {
        $credentials = ["token" => $request->headers->get('X-AUTH-GC')];

        return $credentials;
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        if (empty($credentials['token'])) {
            throw new AuthenticationException('Invalid token');
        }
        
        return null;
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        return false;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $data = ['message' => strtr($exception->getMessageKey(), $exception->getMessageData())];

        return new JsonResponse($data, Response::HTTP_FORBIDDEN);
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        return null;
    }

    public function start(Request $request, AuthenticationException $authException = null) {
        $data = ['message' => 'Authentication required.'];

        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    public function supportsRememberMe() {
        return false;
    }
}
