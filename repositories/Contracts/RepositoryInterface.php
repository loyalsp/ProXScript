<?php
/**
 * Created by PhpStorm.
 * User: Adi
 * Date: 10/2/2017
 * Time: 8:47 PM
 */

namespace Repositories\Contracts;


interface RepositoryInterface
{
    public function getTable($tableName);
    public function createRecord(array $attributes);
    public function updateRecord($id, array $attributes);
    public function getAllRecords();
    public function getRecordById($id);
    public function getRecordsByAttributesValues(array $attributes, array $ColumnsToSelect);
    public function getMultipleRecordsByFieldValues($field,array $values);
    public function deleteRecord($id);
    public function deleteRecordByValue($field,array $values);
    //public function resetModel();
}