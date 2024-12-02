<?php
	if (!function_exists('classExists')) {
    /**
     * Check if a class exists.
     *
     * @param string $className Name of the class to check.
     * @param bool $autoload Whether to attempt autoloading (default true).
     * @return bool True if the class exists, false otherwise.
     */
    function npl_class_exists(string $className, bool $autoload = true): bool {
        try {
            // Tambahkan log jika diperlukan.
            // error_log("Checking for class: $className");
            return \class_exists($className, $autoload);
        } catch (\Throwable $e) {
            // Tangani error jika diperlukan.
            // error_log("Error checking class: " . $e->getMessage());
            return false;
        }
    }

    /* method_exists(object|string $object_or_class, string $method): bool */
    if (!function_exists('methodExists')) {
    /**
     * Check if a method exists in a class or object.
     *
     * @param object|string $objectOrClass The object or class name to check.
     * @param string $methodName The method name to check for.
     * @return bool True if the method exists, false otherwise.
     */
    function npl_method_exists($objectOrClass, string $methodName): bool {
        try {
            // Tambahkan log jika diperlukan.
            // error_log("Checking for method: $methodName in " . (is_object($objectOrClass) ? get_class($objectOrClass) : $objectOrClass));
            return \method_exists($objectOrClass, $methodName);
        } catch (\Throwable $e) {
            // Tangani error jika diperlukan.
            // error_log("Error checking method: " . $e->getMessage());
            return false;
        }
    }
}
}