<?php
trait NodesRolesSchemaTrait
{

    protected $_fields = [
  '_constraints' => 
  [
    'primary' => 
    [
      'type' => 'primary',
      'columns' => 
      [
        0 => 'id',
      ],
      'length' => 
      [
      ],
    ],
  ],
  'id' => 
  [
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => false,
    'default' => NULL,
    'comment' => '',
    'autoIncrement' => true,
    'precision' => NULL,
  ],
  'node_id' => 
  [
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => false,
    'default' => NULL,
    'comment' => '',
    'precision' => NULL,
    'autoIncrement' => NULL,
  ],
  'role_id' => 
  [
    'type' => 'integer',
    'length' => 10,
    'unsigned' => false,
    'null' => false,
    'default' => NULL,
    'comment' => 'The user’s role ID from roles table',
    'precision' => NULL,
    'autoIncrement' => NULL,
  ],
];

    protected $_records = [
];

    public function fields()
    {
        return $this->_fields;
    }

    public function records()
    {
        return $this->_records;
    }
}

class NodesRolesSchema
{

    use NodesRolesSchemaTrait;

}
