#!/bin/bash

composer install

FILE=.env
if [ ! -f "$FILE" ]; then
    cp .env.example .env
fi