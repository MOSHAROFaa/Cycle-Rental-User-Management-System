<?php

function createDatabase($conn, $dbName) {
    $query = "CREATE DATABASE " . $dbName;

    if (mysqli_select_db($conn, $dbName)) {
        // delete database if exists
        $query_delete = "DROP DATABASE " . $dbName;
        $query_result = mysqli_query($conn, $query_delete);
    }
    
    // create database
    $query_result = mysqli_query($conn, $query);
}

function createTables($conn, $dbName) {
    // Select the database
    mysqli_select_db($conn, $dbName);

    // Create tables
    // User type table
    $query = "CREATE TABLE userType (
            typeID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            typeName VARCHAR(5) NOT NULL
        );";
    $query_result = mysqli_query($conn, $query);

    // Adding user and admin type into userType table
    $query = "INSERT INTO userType (typeName)
        VALUES (\"admin\");";
    $query_result = mysqli_query($conn, $query);

    $query = "INSERT INTO userType (typeName)
        VALUES (\"user\");";
    $query_result = mysqli_query($conn, $query);

    // User login details table
    $query = "CREATE TABLE users (
            id INT NOT NULL AUTO_INCREMENT,
            username VARCHAR(50) NOT NULL UNIQUE,
            pword VARCHAR(255) NOT NULL,
            userType INT NOT NULL,
            PRIMARY KEY (id),
            FOREIGN KEY (userType) REFERENCES userType(typeID)
        );";
    $query_result = mysqli_query($conn, $query);

    // Daily sales table
    $query = "CREATE TABLE sales (
            saleID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            reportDate DATE NOT NULL UNIQUE,
            grossSale INT UNSIGNED NOT NULL,
            netSale INT UNSIGNED NOT NULL
        );";
    $query_result = mysqli_query($conn, $query);

    // Email subscription type table
    $query = "CREATE TABLE subType (
        subTypeID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        typeName VARCHAR(7) NOT NULL
    );";
    $query_result = mysqli_query($conn, $query);

    // Adding premium and regular subscription type to subType table
    $query = "INSERT INTO subType (typeName)
        VALUES (\"premium\");";
    $query_result = mysqli_query($conn, $query);

    $query = "INSERT INTO subType (typeName)
        VALUES (\"regular\");";
    $query_result = mysqli_query($conn, $query);

    // Email subscriptions table
    $query = "CREATE TABLE subs (
            subID INT NOT NULL AUTO_INCREMENT,
            email VARCHAR(50) NOT NULL UNIQUE,
            subType INT NOT NULL,
            PRIMARY KEY (subID),
            FOREIGN KEY (subType) REFERENCES subType(subTypeID)
        );";
    $query_result = mysqli_query($conn, $query);

    // Employee table
    $query = "CREATE TABLE employees (
            empID INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            empFName VARCHAR(20) NOT NULL,
            empLName VARCHAR(20) NOT NULL,
            salary INT UNSIGNED NOT NULL
        );";
    $query_result = mysqli_query($conn, $query);
}

function newLocation($page) {
    header("Location: " . $page);
}

?>