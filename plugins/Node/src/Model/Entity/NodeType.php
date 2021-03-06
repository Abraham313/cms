<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
namespace Node\Model\Entity;

use Cake\ORM\Entity;

/**
 * Represents a single "node_type" within "node_types" table.
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property string $title_label
 * @property array $defaults
 */
class NodeType extends Entity
{
}
