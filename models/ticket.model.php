<?php
require "database/cinema_g6.sql";

function getTicket() : array
{
  global $connection;
  $statement = $connection->query("SELECT * FROM tickets");
  $ticketItems = $statement->fetchAll();
  return $ticketItems;
}