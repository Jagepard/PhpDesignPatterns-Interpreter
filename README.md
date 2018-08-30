[![Build Status](https://travis-ci.org/Jagepard/PhpDesignPatterns-Interpreter.svg?branch=master)](https://travis-ci.org/Jagepard/PhpDesignPatterns-Interpreter)
[![codecov](https://codecov.io/gh/Jagepard/PhpDesignPatterns-Interpreter/branch/master/graph/badge.svg)](https://codecov.io/gh/Jagepard/PhpDesignPatterns-Interpreter)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Jagepard/PhpDesignPatterns-Interpreter/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Jagepard/PhpDesignPatterns-Interpreter/?branch=master)
[![Code Climate](https://codeclimate.com/github/Jagepard/PhpDesignPatterns-Interpreter/badges/gpa.svg)](https://codeclimate.com/github/Jagepard/PhpDesignPatterns-Interpreter)
[![License: MIT](https://img.shields.io/badge/license-MIT-498e7f.svg)](https://mit-license.org/)
-----

# Interpreter | [API](https://github.com/Jagepard/PhpDesignPatterns-Interpreter/blob/master/docs.md "Documentation API")
Интерпретатор

![Interpreter](https://github.com/Jagepard/PhpDesignPatterns-Interpreter/blob/master/UML.png)
Паттерн Interpreter определяет грамматику простого языка для проблемной области, представляет грамматические правила в виде языковых предложений и интерпретирует их для решения задачи. 

Интерфейс определяет метод interpret(), принимающий (в качестве аргумента) текущее состояние языкового потока. Каждый конкретный подкласс реализует метод interpret(), добавляя свой вклад в процесс решения проблемы.