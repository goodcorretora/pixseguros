<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;


class ConsentMiddleware
{
/**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Verificar se existe um cookie de consentimento
        $cookieConsent = $request->cookie('pixseguros_consent');

        if (!$cookieConsent) {
            // Se não existir, criar um cookie de consentimento
            Cookie::queue('pixseguros_consent', Str::uuid(), 1);
        }

        // Verificar se o cookie de consentimento já foi aceito ou recusado
        $cookieConsent = $request->cookie('pixseguros_consent');

        if ($cookieConsent === 'accepted') {
            // Se aceito, manter o cookie e excluir a mensagem
            $this->handleAccepted($request);
        } elseif ($cookieConsent === 'declined') {
            // Se recusado, excluir o cookie e a mensagem
            $this->handleDeclined($request);
        }

        // Continuar com a requisição, incluindo a mensagem de consentimento
        $response = $next($request);

        return $response;
    }

    private function handleAccepted(Request $request)
    {
        // Excluir a mensagem, o cookie e registrar a recusa no banco de dados
        Cookie::queue(Cookie::forever('pixseguros_consent', 'accepted'));
        // Redirecionar de volta à página original
        return redirect()->back();
    }

    private function handleDeclined(Request $request)
    {
        // Excluir a mensagem, o cookie e registrar a recusa no banco de dados
        Cookie::queue(Cookie::forget('pixseguros_consent', 'declined'));
    }
}
