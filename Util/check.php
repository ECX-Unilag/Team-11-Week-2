    <?php
    
    class Check{
        
    public function checkEmailExists($email) {
        return Applicant::where('email', $email);
    }
    public function generateBarcodeNumber() {
        $number = mt_rand(1000000000, 9999999999); // better than rand()
    
        // call the same function if the barcode exists already
        if (barcodeNumberExists($number)) {
            return generateBarcodeNumber();
        }
    
        // otherwise, it's valid and can be used
        return $number;
    }
    
    public function barcodeNumberExists($number) {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return Applicant::whereBarcodeNumber($number)->exists();
    }

}