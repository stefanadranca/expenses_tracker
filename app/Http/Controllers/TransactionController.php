<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index($user_id) {
        return Transaction::getTransaction($user_id);
    }
    public function indexNotTagged($user_id) {
        return Transaction::getNotTaggedTransactions($user_id);
    }
}
