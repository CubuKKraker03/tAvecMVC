<?php
function getTickets() {
                $bdd = getBdd();
                $tickets = $bdd->query('select * from T_TICKET inner join T_ETAT
                ON T_ETAT.ET_ID = T_TICKET.ET_ID;');
                return $tickets;
}

function getBdd () {
    $bdd = new PDO('mysql:host=localhost;dbname=monTicketingAVEC;charset=utf8',
                        'admin', 'password', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}