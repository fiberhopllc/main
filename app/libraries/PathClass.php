<?php

    /**
     * Performs operations on String instances that contain file or directory path information. These operations are performed in a cross-platform manner.
     *
     * PHP version 5
     *
     * @author    Priyesh Das, Amrutha A S, Vinu M S, Saabin Varghese K, Nizam Ameen, Jenson Joseph
     * @copyright 2014-2015 AXL Computer Academy
     * @version   1.0
     */
    class Path {
        public static function __callStatic($method_name, $parameters)
        {
            $ret = '';
            if ($method_name == 'combine') {
                $cnt = count($parameters);
                switch ($cnt) {
                    case 1:
                        if (is_array($parameters[ 0 ])) {
                            $ret = self::combineArray($parameters[ 0 ]);
                        } else {
                            $ret = $parameters[ 0 ];
                        }
                        break;
                    case 2:
                        $ret = self::combinePaths($parameters[ 0 ], $parameters[ 1 ]);
                        break;
                    case 3:
                        $ret = self::combinePaths(self::combinePaths($parameters[ 0 ], $parameters[ 1 ]), $parameters[ 2 ]);
                        break;
                    case 4:
                        $ret = self::combinePaths(self::combinePaths($parameters[ 0 ], $parameters[ 1 ]), self::combinePaths($parameters[ 2 ], $parameters[ 3 ]));
                        break;
                }
            }

            return $ret;
        }

        /**
         * Combines three strings into a path.
         * @param string path1 The first path to combine.
         * @param string path2 The second path to combine.
         * @param string path3 The third path to combine.
         * @param string path4 The fourth path to combine.
         * @return string The combined paths.
         */
        private static function combineArray($path1)
        {
            $completePath = '';
            if (is_array($path1)) {
                foreach ($path1 as $path) {
                    $completePath = self::combinePaths($completePath, $path);
                }
            }

            return $completePath;
        }

        /**
         * Combines two strings into a path.
         * @param string path1 The first path to combine.
         * @param string path2 The second path to combine.
         * @return string The combined paths.
         */
        public static function combinePaths($path1, $path2)
        {
            if ($path1 == '') {
                return $path2;
            }
            $fullPath = '';
            if (substr($path1, strlen($path1) - 2, strlen($path1) - 1) !== DIRECTORY_SEPARATOR) {
                $fullPath = $path1 . DIRECTORY_SEPARATOR;
            } else {
                $fullPath = $path1;
            }
            if (substr($path2, 0, 1) !== DIRECTORY_SEPARATOR) {
                $fullPath .= $path2;
            } else {
                $fullPath .= substr($path2, 1, strlen($path2) - 1);
            }

            return $fullPath;
        }

        /**
         * Returns the directory information for the specified path string.
         * @param string path The path of a file or directory.
         * @return string Directory information for path, or null if path denotes a root directory or is null.
         */
        public static function GetDirectoryName($in_keyword)
        {
            $dirname = pathinfo($path, PATHINFO_DIRNAME);

            return $dirname;
        }

        /**
         * Returns the file name and extension of the specified path string.
         * @param string path The path of a file or directory.
         * @return string The extension of the specified path (including the period "."), or null.
         */
        public static function GetExtension($path)
        {
            $extension = pathinfo($path, PATHINFO_EXTENSION);

            return $extension;
        }

        /**
         * Returns the file name and extension of the specified path string.
         * @param string path The path of a file or directory.
         * @return string The characters after the last directory character in path.
         */
        public static function GetFileName($path)
        {
            return basename($path);
        }

        /*
        * Returns the file name of the specified path string without the extension.
        * @param string path The path of a file or directory.
        * @return string The string returned by GetFileName, minus the last period (.) and all characters following it.
        */
        public static function getFileNameWithoutExtension($path)
        {
            $fileName = pathinfo($path, PATHINFO_FILENAME);

            return $fileName;
        }
    }