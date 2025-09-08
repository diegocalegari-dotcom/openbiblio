<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

require_once(__DIR__ . "/Table.php"); // Use __DIR__ for absolute path

class AbntTable extends Table
{
    function printRow($row)
    {
        $output = "";

        // Call Number (028.5 S144p) - assuming callno is already formatted
        $call_number = isset($row['callno']) ? $row['callno'] : '';

        // Author (SAINT-EXUPÉRY, Antoine de.) - from marc_100a
        $author = isset($row['marc_100a']) ? $row['marc_100a'] : '';
        if (!empty($author)) {
            // ABNT: Last Name in CAPS, then First Name.
            // This is a simplification. Real ABNT author formatting is complex.
            // For now, just capitalize the whole string.
            $author_parts = explode(',', $author);
            if (count($author_parts) > 1) {
                $last_name = trim($author_parts[0]);
                $first_name = trim($author_parts[1]);
                $author = strtoupper($last_name) . ', ' . $first_name;
            } else {
                $author = strtoupper($author);
            }
        }

        // Title (O pequeno príncipe) - from marc_245a, bold
        $title = isset($row['marc_245a']) ? '<b>' . $row['marc_245a'] . '</b>' : '';

        // Edition (edition statement. ed.) - from marc_250a
        $edition = isset($row['marc_250a']) ? $row['marc_250a'] . '. ed.' : '';

        // Place of publication (place of publication) - from marc_260a
        $place = isset($row['marc_260a']) ? $row['marc_260a'] : '';

        // Name of publisher (name of publisher) - from marc_260b
        $publisher = isset($row['marc_260b']) ? $row['marc_260b'] : '';

        // Date of publication (date of publication) - from marc_260c
        $date = isset($row['marc_260c']) ? $row['marc_260c'] : '';

        // Assemble the ABNT citation
        $citation_parts = [];
        if (!empty($author)) {
            $citation_parts[] = $author;
        }
        if (!empty($title)) {
            $citation_parts[] = $title;
        }
        if (!empty($edition)) {
            $citation_parts[] = $edition;
        }

        $publication_info = [];
        if (!empty($place)) {
            $publication_info[] = $place;
        }
        if (!empty($publisher)) {
            $publication_info[] = $publisher;
        }
        if (!empty($date)) {
            $publication_info[] = $date;
        }

        if (!empty($publication_info)) {
            $citation_parts[] = implode(': ', $publication_info);
        }

        $output = implode('. ', $citation_parts) . '.'; // Final period

        // Add call number at the beginning if available
        if (!empty($call_number)) {
            $output = $call_number . ' ' . $output;
        }

        echo '<tr><td>' . $output . '</td></tr>';
    }
}
?>