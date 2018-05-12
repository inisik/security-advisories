<?php
declare(strict_types=1);
/**
 * Astro.
 *
 * A social authentication library designed to securely send api requests to social networking websites.
 *
 * @author Astro Contributors <https://github.com/inisik/astro/graphs/contributors>
 *
 * @license <https://github.com/inisik/astro/blob/master/LICENSE>.
 * @link    <https://github.com/inisik/astro>.
 */

namespace Astro\SocialAuthentication;

use GuzzleHttp\Client;

/**
 * @class RequestHandler.
 */
class RequestHandler
{

    /**
     * @var array $methods A list of avaliable methods.
     */
    private static $methods = [
        'get',
        'delete',
        'head',
        'options',
        'patch',
        'post',
        'put'
    ];

    /**
     * @var Client $client The guzzle client.
     */
    private static $client;

    /**
     * Open a new guzzle client to run api requests.
     *
     * @return void Return nothing.
     *
     * @codeCoverageIgnore
     */
    public function openClient(): void
    {
        self::$client = new Client();
    }

    /**
     * Check to see if the method is valid.
     *
     * @param string $method The method to check.
     *
     * @return bool Return true if the method is valid and false if othrwise.
     */
    public static function isValidMethod(string $method): bool
    {
        return in_array($method, self::$methods);
    }    
}
