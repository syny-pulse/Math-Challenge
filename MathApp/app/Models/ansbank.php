<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ansbank extends Model
{
    use HasFactory;

    protected $table = 'ansbank'; // Specifies the table associated with the model

    protected $primaryKey = 'answerBankID'; // Specifies the primary key field

    public $incrementing = true; // Specifies if the ID is auto-incrementing (true by default for integer IDs)

    protected $fillable = [
        'challengeNo', 
        'questionBankID',
    ]; // Allows mass assignment of these attributes

    // Define the relationship with the Challenge model
    public function challenge()
    {
        return $this->belongsTo(Challenge::class, 'challengeNo', 'challengeNo');
    }

    // Define the relationship with the Qtnbank model
    public function qtnbank()
    {
        return $this->belongsTo(Qtnbank::class, 'questionBankID', 'questionBankID');
    }
}
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ansbank extends Model
{
    use HasFactory;
}
