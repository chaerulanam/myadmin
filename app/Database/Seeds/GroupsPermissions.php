<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroupsPermissions extends Seeder
{
    public function run()
    {
        $data = [
            [
                'group_id' => 1,
                'permission_id'    => 1
            ],
            [
                'group_id' => 1,
                'permission_id'    => 2
            ],
            [
                'group_id' => 1,
                'permission_id'    => 3
            ],
            [
                'group_id' => 1,
                'permission_id'    => 4
            ],
            [
                'group_id' => 1,
                'permission_id'    => 5
            ],
            [
                'group_id' => 1,
                'permission_id'    => 6
            ],
        ];

        // Using Query Builder
        $this->db->table('auth_groups_permissions')->insertBatch($data);
    }
}