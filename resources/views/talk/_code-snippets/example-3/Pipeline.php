<?php

namespace App\Pipeline;

use App\DTO\Dto;
use Closure;
use Illuminate\Support\Str;

class AddName
{
    public function __invoke(Dto $dto, Closure $next)
    {
        if ($dto->user->name !== null) {
            $dto->url .= "&name={$dto->user->name}";
        }

        return $next($dto);
    }
}

class AddAge
{
    public function __invoke(Dto $dto, Closure $next)
    {
        if ($dto->user->age === null) {
            return $next($dto);
        }

        $dto->url .= "&age={$dto->user->age}";

        if ($dto->user->age >= 18) {
            $dto->url .= '&adulthood=1';
        }

        if ($dto->user->age < 18) {
            $dto->url .= '&adulthood=0';
        }

        return $next($dto);
    }
}

class AddEmail
{
    public function __invoke(Dto $dto, Closure $next)
    {
        if ($dto->user->email === null) {
            return $next($dto);
        }

        $dto->url .= "&email={$dto->user->email}";

        $domain = Str::of($dto->user->email)->explode('@')[1];
        $dto->url .= '&email_domain='.$domain;

        if ($domain === 'example.com') {
            $dto->url .= '&trusted_domain=1';
        }

        return $next($dto);
    }
}

class AddRole
{
    public function __invoke(Dto $dto, Closure $next)
    {
        if ($dto->user->role === null) {
            $dto->url .= '&role=guest';
        } else {
            $dto->url .= "&role={$dto->user->role}";
        }

        return $next($dto);
    }
}

class FixUrlString
{
    public function __invoke(Dto $dto, Closure $next)
    {
        Str::of($dto->url)->replace('?&', '?')->__toString();

        return $next($dto);
    }
}
