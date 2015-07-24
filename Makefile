MAKEFILE_PATH := $(abspath $(lastword $(MAKEFILE_LIST)))
ROOT_DIR := $(patsubst %/,%,$(dir $(MAKEFILE_PATH)))

VENDOR_DIR := $(ROOT_DIR)/vendor
SRC_DIR := $(ROOT_DIR)/src
DOC_DIR := $(ROOT_DIR)/docs
BIN_DIR := $(VENDOR_DIR)/bin

PHP = /usr/bin/env php
COMPOSER = $(ROOT_DIR)/composer.phar
PHPUNIT = $(BIN_DIR)/phpunit
PHPDOC = $(BIN_DIR)/phpdoc

default: install

help:
	@echo "Targets:"
	@echo "    make - default to make install"
	@echo "    make install - install dependencies (default)"
	@echo "    make test - run test"
	@echo "    make doc - generate API documentation"

install: install-composer install-deps

test: test-unit

doc: phpdoc

install-composer:
ifeq ("$(wildcard $(COMPOSER))","")
	@echo "..downloading Composer";
	@curl -sS https://getcomposer.org/installer | $(PHP)
endif

install-deps:
	@echo "..installing dependencies with Composer"
	@$(PHP) $(COMPOSER) install --no-progress

test-unit:
	@$(PHPUNIT)

phpdoc:
	@$(PHPDOC) -d $(SRC_DIR) -t $(DOC_DIR) --template="responsive-twig"

.PHONY: default help install test doc create-bindir install-composer install-deps test-unit phpdoc
