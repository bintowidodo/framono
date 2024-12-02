<?php

	/**
		Fungsi ini berguna untuk menetapkan atau mendapatkan kode status HTTP dalam aplikasi web.
        http_response_code(int $response_code = 0): int|bool
	**/ 
    function npl_http_response_code(int $response_code = 0){
         return http_response_code($response_code);
    }


	if (!function_exists('httpResponseCode')) {
    /**
     * Set or get the HTTP response code.
     *
     * @param int|null $code The HTTP response code to set. If null, returns the current response code.
     * @return int The current or previous response code.
     * @throws \InvalidArgumentException If the provided code is not a valid HTTP status code.
     */
    function httpResponseCode(?int $code = null): int {
        static $validStatusCodes = [
            100, 101, 102, 103, 200, 201, 202, 203, 204, 205, 206, 207, 208, 226,
            300, 301, 302, 303, 304, 305, 307, 308,
            400, 401, 402, 403, 404, 405, 406, 407, 408, 409, 410, 411, 412, 413, 414, 415, 416, 417, 418, 421, 422, 423, 424, 425, 426, 428, 429, 431, 451,
            500, 501, 502, 503, 504, 505, 506, 507, 508, 510, 511
        ];

        if ($code !== null) {
            // Validasi kode status.
            if (!in_array($code, $validStatusCodes, true)) {
                throw new \InvalidArgumentException("Invalid HTTP status code: $code");
            }

            // Set kode status.
            return \http_response_code($code);
        }

        // Dapatkan kode status saat ini.
        return \http_response_code();
    }
}