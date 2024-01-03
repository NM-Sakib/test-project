<?php

namespace Sakib\Inspire;

use Illuminate\Support\Facades\DB;

class Inspire {
    public function create($data) {
        return DB::table('tasks')->insert($data);
    }

    public function read($id) {
        return DB::table('tasks')->find($id);
    }

    public function update($id, $data) {
        return DB::table('tasks')->where('id', $id)->update($data);
    }

    public function delete($id) {
        return DB::table('tasks')->where('id', $id)->delete();
    }
}
