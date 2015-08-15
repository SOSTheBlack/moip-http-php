<?php

namespace Sostheblack\Http;

/**
 * Interface para definição de um autenticador HTTP.
 */
interface HTTPAuthenticator
{
    /**
     * Autentica uma requisição HTTP.
     *
     * @param \Sostheblack\Http\HTTPRequest $httpRequest
     */
    public function authenticate(HTTPRequest $httpRequest);
}
