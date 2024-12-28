<?php
namespace KYCSDK;



class extractor {

    public function extract_data(){
    
    }

    private function processText(string $text): array
    {
        // Example simplistic text processing
        $lines = explode("\n", $text);
        $data = [];
        foreach ($lines as $line) {
            if (strpos($line, 'Name:') !== false) {
                $data['name'] = trim(str_replace('Name:', '', $line));
            }
            if (strpos($line, 'ID Number:') !== false) {
                $data['id_number'] = trim(str_replace('ID Number:', '', $line));
            }
        }
        return $data;
    }
}