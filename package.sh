#!/bin/bash
# Zip the package

rm SkiboynetTemplate.zip
zip -r SkiboynetTemplate.zip css fonts html img index.html index.php js language less README.md LICENSE.txt templateDetails.xml component.php

packagesize=$(ls -lh SkiboynetTemplate.zip)
echo "Created: $packagesize"
