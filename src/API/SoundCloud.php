<?php

/*
 * This file is part of SMMHouse PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SMMHouse\API;

use BrianFaust\Http\HttpResponse;

class SoundCloud extends AbstractAPI
{
    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderPlays(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Plays', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderDownloads(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Downloads', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderFollowers(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Followers', $amount);
    }

    /**
     * @param string $link
     * @param int    $amount
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function orderLikes(string $link, int $amount): HttpResponse
    {
        return $this->createOrder($link, 'Likes', $amount);
    }

    /**
     * @return string
     */
    public function getServiceIdentifier(): string
    {
        return 'soundcloud';
    }
}