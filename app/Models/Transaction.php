<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $table = "transactions";

    protected $fillable = ['tag', 'owner'];
    public function owner() {
        return $this->belongsTo('App\User');
    }
    public static function getTransaction($user_id) {
        $transactions = Transaction::where('owner', $user_id)->get();
        return json_encode($transactions);
    }

    public static function getNotTaggedTransactions($user_id) {
        $transactions = Transaction::where('owner', $user_id)->where('tag', 'notset')->get();
        return json_encode($transactions);
    }
}
