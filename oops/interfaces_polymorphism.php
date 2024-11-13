<?php
// Define an interface with a required method
interface Logger {
    public function log($message);
}

// FileLogger class implements Logger interface
class FileLogger implements Logger {
    public function log($message) {
        echo "Logging to a file: " . $message;
    }
}

// DatabaseLogger class implements Logger interface
class DatabaseLogger implements Logger {
    public function log($message) {
        echo "Logging to a database: " . $message;
    }
}

// Function that uses any Logger implementation
function writeLog(Logger $logger, $message) {
    $logger->log($message);
}

// Using FileLogger and DatabaseLogger interchangeably
$fileLogger = new FileLogger();
$databaseLogger = new DatabaseLogger();

writeLog($fileLogger, "File log message"); // Output: Logging to a file: File log message
echo "<br>";
writeLog($databaseLogger, "Database log message"); // Output: Logging to a database: Database log message
?>
<!-- Explanation: Logger is an interface that requires a log() method. Both FileLogger and DatabaseLogger implement Logger, allowing writeLog() to accept any class that implements Logger, demonstrating polymorphism. -->