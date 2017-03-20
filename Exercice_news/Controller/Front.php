<?php

namespace App\Controller;

use \PDO;
use Symfony\Component\HttpFoundation\RedirectResponse;

class Front
{
    public function getIndex($request, $response)
    {
        $connect[dns] = 'mysql:host=localhost; dbname=sg-news-db; charset=utf8';
        $connect[name] = 'root';
        $connect[pass] = '';

        try {
            $db = new PDO($connect[dns], $connect[name], $connect[pass]);
        } catch (PDOException $e) {
            die('Error connection: ' . $e->getMessage());
        }

        $sql = "SELECT * FROM news ORDER BY id DESC LIMIT 25";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $response->setContent(include '../templates/index_template.php');
        return $response;
    }
    
    public function getLogin($request, $response)
    {
        return $response->setContent('<form action="/login" method="POST">
            <input name="name">
            <input name="pass">
            <input type="submit">
        </form>');
    }
    public function postLogin($request)
    {
        $login = $request->request->get('name');
        $pass = $request->request->get('pass');

        $session = $request->getSession();
        if ($login == 'test' && $pass == '123') {
            $session->set('logged', true);
            return new RedirectResponse('/cabinet');
        }

        return new RedirectResponse('/login');
    }
    
    public function getLogout($request, $response)
    {
        $session = $request->getSession();
        $session->invalidate();
        return new RedirectResponse('/');
    }
}