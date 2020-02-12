<?php
namespace App\Models\Api;

use CodeIgniter\Model;

/**
 * Description of User
 *
 * @author hoksi
 */
class User extends Model
{
    protected $table = 'users'; // 테이블 명
    protected $primaryKey = 'user_ix'; // primary key

    protected $useTimestamps = true;
    protected $createdField  = 'created_at'; // 생성일시
    protected $updatedField  = 'updated_at'; // 수정일시

    protected $allowedFields = ['user_id', 'user_pw', 'name']; // 수정 가능한 컬럼
}