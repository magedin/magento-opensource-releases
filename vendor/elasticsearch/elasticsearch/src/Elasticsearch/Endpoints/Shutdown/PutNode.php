<?php
/**
 * Elasticsearch PHP client
 *
 * @link      https://github.com/elastic/elasticsearch-php/
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license   https://www.gnu.org/licenses/lgpl-2.1.html GNU Lesser General Public License, Version 2.1 
 * 
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License or
 * the GNU Lesser General Public License, Version 2.1, at your option.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types = 1);

namespace Elasticsearch\Endpoints\Shutdown;

use Elasticsearch\Common\Exceptions\RuntimeException;
use Elasticsearch\Endpoints\AbstractEndpoint;

/**
 * Class PutNode
 * Elasticsearch API name shutdown.put_node
 *
 * NOTE: this file is autogenerated using util/GenerateEndpoints.php
 * and Elasticsearch 7.13.0-SNAPSHOT (10b8c40a14fbb484cbc0664d0ad5d5b6e5be2ab5)
 */
class PutNode extends AbstractEndpoint
{
    protected $node_id;

    public function getURI(): string
    {
        $node_id = $this->node_id ?? null;

        if (isset($node_id)) {
            return "/_nodes/$node_id/shutdown";
        }
        throw new RuntimeException('Missing parameter for the endpoint shutdown.put_node');
    }

    public function getParamWhitelist(): array
    {
        return [
            
        ];
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): PutNode
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setNodeId($node_id): PutNode
    {
        if (isset($node_id) !== true) {
            return $this;
        }
        $this->node_id = $node_id;

        return $this;
    }
}
