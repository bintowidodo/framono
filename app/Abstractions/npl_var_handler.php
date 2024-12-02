<?php
	
	/* isset(mixed $var, mixed ...$vars): bool */
    /**
    Membuat alias untuk fungsi bawaan seperti isset() di PHP memerlukan pendekatan khusus
    karena isset adalah konstruksi bahasa (language construct), bukan fungsi biasa. PHP tidak
    mengizinkan alias langsung untuk konstruk bahasa. Namun, Anda dapat menyiasatinya dengan
    membuat fungsi kustom yang mereplikasi perilaku isset().
    **/
    function npl_isset(&$variable, bool $logMissing = false): bool {
        $isSet = isset($variable);

        if (!$isSet && $logMissing) {
            error_log("Variable is not set or is null.");
        }

        return $isSet;
    }
	
    
    function xnpl_isset(...$vars) {
        foreach ($vars as $var) {
            if (!isset($var)) {
                return false;
            }
        }
        return true;
    }

    /** 
    is_callable — Verify that a value can be called as a function from the current scope.
    is_callable(mixed $value, bool $syntax_only = false, string &$callable_name = null): bool
    **/
    function npl_iscallable($function, $type = 'function') {
        if ($type === 'function' && is_callable($function) && !is_array($function)) {
            return true;
        }
        if ($type === 'static' && is_callable($function) && is_array($function)) {
            return true;
        }
        return false;
    }

    /*is_array(mixed $value): bool*/
    function npl_is_array($value)
    {
        return is_array($value);
    }