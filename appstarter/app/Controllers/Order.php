<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_Menu;
use App\Models\Model_JenisMenu;
use App\Models\Model_Daerah;
use App\Models\Model_SecretJenis;
use App\Models\Model_SecretMenu;

class Order extends Controller
{
    public function addCart()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');

            $session = session();
            if (!$session->has('cart')) {
                $session->set('cart', array());
            }

            $menu = new Model_Menu();
            $menus = $menu->find($id);
            $jenis = new Model_JenisMenu();

            $key = 'menu_' . $id;

            $cart = array(
                $key => array(
                    'id' => $id,
                    'nama' => $menus['nama_menu'],
                    'deskripsi' => $menus['deskripsi'],
                    'harga' => $menus['harga'],
                ),
            );
            $session->push('cart', $cart);
            $msg = [
                'sukses' => 'Data berhasil ditambah ke cart'
            ];
            echo json_encode($msg);
        }
    }

    public function addCartSecret()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');

            $session = session();
            if (!$session->has('secret')) {
                $session->set('secret', array());
            }

            $menu = new Model_SecretMenu();
            $menus = $menu->find($id);
            $jenis = new Model_SecretJenis();

            $key = 'menu_' . $id;

            $cart = array(
                $key => array(
                    'id' => $id,
                    'nama' => $menus['nama_menu'],
                    'deskripsi' => $menus['deskripsi'],
                    'harga' => $menus['harga'],
                ),
            );
            $session->push('secret', $cart);
            $msg = [
                'sukses' => 'Data berhasil ditambah ke cart'
            ];
            echo json_encode($msg);
        }
    }

    public function deleteCart()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $session = session();
            if ($session->has('cart')) {
                unset($_SESSION['cart'][$id]);
                $msg = [
                    'sukses' => 'Data berhasil dihapus dari cart'
                ];
                echo json_encode($msg);
            }
        }
    }

    public function deleteCartSecret()
    {
        if ($this->request->isAJAX()) {
            $id = $this->request->getVar('id');
            $session = session();
            if ($session->has('secret')) {
                unset($_SESSION['secret'][$id]);
                $msg = [
                    'sukses' => 'Data berhasil dihapus dari cart'
                ];
                echo json_encode($msg);
            }
        }
    }

    public function getMenu()
    {
        if ($this->request->isAJAX()) {
            $session = session();
            $data = [
                'cart' => $session->cart,
                'secret' => $session->secret
            ];
            echo json_encode($data);
        }
    }

    public function getDaerah()
    {
        if ($this->request->isAJAX()) {
            if (session()->get('cart')) {
                $daerah = new Model_Daerah();
                $zone = $daerah->findAll();
                return $this->response->setJSON($zone);
            } else {
                return $this->response->setStatusCode(500, 'Silahkan pilih menu untuk dipesan terlebih dahulu.');
            }
        }
    }

    public function pesan()
    {
        if ($this->request->isAJAX()) {
            $nama = $this->request->getVar('nama_pemesan');
            $alamat = $this->request->getVar('alamat_pemesan');
            $tempat = $this->request->getVar('daerah_id');
            if (!$nama == '' && !$alamat == '' && !$tempat == '') {
                $menu = new Model_Menu();
                $daerah = new Model_Daerah();

                $zona = $daerah->find($this->request->getVar('daerah_id'));


                $pesan = "Halo Warjam \nAtas Nama :" . $nama . "\nDaerah :" . $zona['nama_daerah'] . "\nAlamat :" . $alamat . "\nMemesan:\n";
                $cart = $this->request->getVar('cart');

                foreach ($cart as $item) {
                    $menus = $menu->find($item['id']);
                    $nama_menu = $menus['nama_menu'];
                    $pesan .= $item['jumlah'] . " " . $nama_menu . "\n";
                }

                $msg = [
                    'sukses' => 'Data berhasil dipesan',
                    'pesan' => urlencode($pesan),
                ];
                $session = session();
                $session->remove('cart');
                return $this->response->setJSON($msg);
            } else {
                return $this->response->setStatusCode(500, 'Mohon penuhi form identitas berikut terlebih dahulu.');
            }
        }
    }

    public function pesanSecret()
    {
        if ($this->request->isAJAX()) {
            $menu = new Model_Menu();
            $menu_secret = new Model_SecretMenu();
            $nomor_meja = $this->request->getVar('nomor_meja');


            $pesan = "Halo Warjam \nMeja Nomor : " . $nomor_meja . "\nMemesan:\n";

            $cart = $this->request->getVar('cart');

            if ($cart) {
                foreach ($cart as $item) {
                    $menus = $menu->find($item['id']);
                    $nama_menu = $menus['nama_menu'];
                    $pesan .= $item['jumlah'] . " " . $nama_menu . "\n";
                }
            }

            //secret
            $secret = $this->request->getVar('secret');
            foreach ($secret as $item) {
                $menus = $menu_secret->find($item['id']);
                $nama_menu = $menus['nama_menu'];
                $pesan .= $item['jumlah'] . " " . $nama_menu . "\n";
            }

            $msg = [
                'sukses' => 'Data berhasil dipesan',
                'pesan' => urlencode($pesan),
            ];
            $session = session();
            $session->remove('cart');
            $session->remove('secret');
            $session->remove('nomor_meja');
            return $this->response->setJSON($msg);
        }
    }
}
