<?php

declare(strict_types=1);

/*
 * This file is part of SMMHouse PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\SMMHouse\API;

use Plients\Http\HttpResponse;

class Twitch extends AbstractAPI
{
    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \Plients\Http\HttpResponse
     */
    public function orderViews(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Views', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier(): string
    {
        return 'twitch';
    }
}
