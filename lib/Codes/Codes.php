<?php
class Codes
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'ID',
            'evc_code' => 'EVC Code',
            'amount' => 'Amount',
        ];

        return $ordering;
    }
}
?>
