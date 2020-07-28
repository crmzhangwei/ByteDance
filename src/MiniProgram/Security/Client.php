<?php

/*
 * This file is part of the OtkurBiz/ByteDance.
 *
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace OtkurBiz\ByteDance\MiniProgram\QRCode;

use OtkurBiz\ByteDance\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ndzhangwei16@163.com
 */
class Client extends BaseClient
{
    /**

     *
     * @throws \OtkurBiz\ByteDance\Kernel\Exceptions\InvalidConfigException
     *
     * @return \Psr\Http\Message\ResponseInterface|\EasyWeChat\Kernel\Support\Collection|array|object|string
     */
    public function create(array $tasks)
    {
        return $this->httpPost('api/v2/tags/text/antidirt', ['tasks'=>$tasks]);
    }
}
