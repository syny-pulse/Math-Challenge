<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    use HasFactory;

    protected $table = 'qtnbank'; // specify the table name

    protected $primaryKey = 'questionBankID'; // specify the primary key

    protected $fillable = [
        'challengeNo',
    ];

    // Define relationships if needed, for example:
    public function challenge()
    {
        return $this->belongsTo(Challenge::class, 'challengeNo', 'challengeNo');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'questionBankID', 'questionBankID');
    }

    public function answerBanks()
    {
        return $this->hasMany(AnswerBank::class, 'questionBankID', 'questionBankID');
    }
}

