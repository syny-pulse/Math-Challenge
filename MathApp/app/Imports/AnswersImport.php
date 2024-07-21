<?php

namespace App\Imports;

use App\Models\Answer;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AnswersImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Answer([
            'id' => $row['answer_id'],
            'answer' => $row['answer'],
            'marks' => $row['marks'],
            'question_id' => $row['question_id'],
        ]);
    }
}

