<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php' );
require_once($_SERVER['DOCUMENT_ROOT'].'/wp-config.php' );
error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", true);

$xml = csv2xml('/home/atlantis/preprod/import/annonces.csv', 'channel', 'item');

function csv2xml($file, $container = 'data', $rows = 'row') {
	require_once('parsecsv.lib.php');
	$csv = new parseCSV();
	$csv->auto('/home/atlantis/preprod/import/annonces.csv');
	$r = "";
	$i = 0;
	foreach ($csv->data as $data){
		if($data['libelle']){
			  $r .= "<item>";
			  $r .= "\t\t<title><![CDATA[{$data['libelle']}]]></title>\n";
			  $r .= "\t\t<statut><![CDATA[{$data['etat_annonce']}]]></statut>\n";
			  $r .= "\t\t<support><![CDATA[{$data['id_support']}]]></support>\n";
			  $r .= "\t\t<secteur><![CDATA[{$data['Secteurs']}]]></secteur>\n";
			  $r .= "\t\t<fonction><![CDATA[{$data['Fonctions']}]]></fonction>\n";
			  $r .= "\t\t<region><![CDATA[{$data['region']}]]></region>\n";
			  $r .= "\t\t<code_postal><![CDATA[{$data['zip']}]]></code_postal>\n";
			  $r .= "\t\t<ville><![CDATA[{$data['CITY']}]]></ville>\n";
			  $r .= "\t\t<pays><![CDATA[{$data['PAYS']}]]></pays>\n";
			  $r .= "\t\t<salaire_min><![CDATA[{$data['SALARYMIN']}]]></salaire_min>\n";
			  $r .= "\t\t<salaire_max><![CDATA[{$data['SALARYMAX']}]]></salaire_max>\n";
			  $r .= "\t\t<id_annonce><![CDATA[{$data['id_annonce']}]]></id_annonce>\n";
			  $r .= "\t\t<profil><![CDATA[{$data['texte_annonce']}]]></profil>\n";
			  $r .= "\t\t<client><![CDATA[{$data['DESCRCUSTOMER']}]]></client>\n";
			  $r .= "\t\t<annonce><![CDATA[{$data['DESCRASSIGNMENT']}]]></annonce>\n";
			  $r .= "\t\t<contrat><![CDATA[{$data['TYPECONTRAT']}]]></contrat>\n";
			  $r .= "\t\t<date_debut><![CDATA[{$data['date_debut']}]]></date_debut>\n";
			  $r .= "\t\t<reference><![CDATA[{$data['reference']}]]></reference>\n<guid><![CDATA[{$data[$i]}]]></guid>\n";
			  $r .= "</item>";
		}
		$i = $i + 1;
	}
	return $r;
}
/*
header("content-type: application/xml");
echo '<?xml version="1.0" encoding="ISO-8859-1"?>';
<rss version="2.0">
  <channel> 
    <title>Atlantis RH - Annonces Ad-Men</title>
    <link>http://www.atlantis-rh.fr</link>
    <description>Annonces Atlantis RH from Ad-Men</description>
    <language>fr</language>
    <copyright>Atlantis RH</copyright>
    <generator>Atlantis RH CSV2XML</generator>
    <version>1</version>
    <?php
    $xml = str_replace('&', '&amp;', $xml);
    //$xml = str_replace( '####', '', $xml );
    echo $xml;
    ?>
  </channel>
</rss>
*/

$xml_annonce =  "";
$xml = str_replace('&', '&amp;', $xml);
$xml_annonce = '<?xml version="1.0" encoding="ISO-8859-1"?>';
$xml_annonce = $xml_annonce.'
<rss version="2.0">
  <channel> 
    <title>Atlantis RH - Annonces Ad-Men</title>
    <link>http://www.atlantis-rh.fr</link>
    <description>Annonces Atlantis RH from Ad-Men</description>
    <language>fr</language>
    <copyright>Atlantis RH</copyright>
    <generator>Atlantis RH CSV2XML</generator>
    <version>1</version>
    '.$xml.'
  </channel>
</rss>';
$ar_annonce = simplexml_load_string($xml_annonce);

foreach ($ar_annonce->channel->item as $item){
	$title = @(string)$item->title;
	$statut = @(string)$item->statut;
	$support = @(string)$item->support;
	$secteur = @(string)$item->secteur;
	$fonction = @(string)$item->fonction;
	$region = @(string)$item->region;
	$code_postal = @(string)$item->code_postal;
	$ville = @(string)$item->ville;
	$pays = @(string)$item->pays;
	$salaire_min = @(string)$item->salaire_min;
	$salaire_max = @(string)$item->salaire_max;
	$id_annonce = @(string)$item->id_annonce;
	$profil = @(string)$item->profil;
	$client = @(string)$item->client;
	$annonce = @(string)$item->annonce;
	$contrat = @(string)$item->contrat;
	$date_debut = @(string)$item->date_debut;
	$reference = @(string)$item->reference;
	global $wpdb;
	$postid = "";
	$update = false;
	
	$prefix = $wpdb->prefix;
	$query =  'SELECT * FROM '.$prefix.'posts WHERE post_type = "annonce" and post_status="publish"';
	$results = $wpdb->get_results($query , OBJECT );
	if($results){
		foreach($results as $object){
			//wp_delete_post($object->ID);
			//if(utf8_decode($object->post_title) == utf8_decode($title)){
			if(get_field( "ref", $object->ID ) == $reference){
				$postid = $object->ID;
				$update = true;
			}
		}
	}
	//exit();
	if($update){
		if($title){
			update_annonce(
				$postid,$statut,$support,$secteur,$fonction,
				$region,$code_postal,$ville,$pays,$salaire_min,$salaire_max,$id_annonce,
				$profil,$client,$annonce,$contrat,$date_debut,$reference
			);
		}
	}else{
		if($title){
			add_annonce(
				$title,$statut,$support,$secteur,$fonction,
				$region,$code_postal,$ville,$pays,$salaire_min,$salaire_max,$id_annonce,
				$profil,$client,$annonce,$contrat,$date_debut,$reference
			);
		}
	}
}
echo "bien";exit();
function add_annonce(
			$title,$statut,$support,$secteur,$fonction,
			$region,$code_postal,$ville,$pays,$salaire_min,$salaire_max,$id_annonce,
			$profil,$client,$annonce,$contrat,$date_debut,$reference
		){
			// echo'add';
			global $wpdb;
			$my_post = array(
			  'post_title'    => esc_sql($title),
			  'post_status'   => 'publish',
			  'post_type'   => 'annonce'
			);
			$post_id = wp_insert_post( $my_post );
			
			add_post_meta($post_id, 'ref', $reference);			
			add_post_meta($post_id, 'contrat', $contrat);			
			add_post_meta($post_id, 'fonction', $fonction);
			add_post_meta($post_id, 'secteur', $secteur);
			add_post_meta($post_id, 'salary-min', $salaire_min);
			add_post_meta($post_id, 'salary-max', $salaire_max);
			add_post_meta($post_id, 'region', $region);
			add_post_meta($post_id, 'zip', $code_postal);
			add_post_meta($post_id, 'city', $ville);
			add_post_meta($post_id, 'pays', $pays);
			add_post_meta($post_id, 'descrassignement', imap_utf8($annonce));
			add_post_meta($post_id, 'descrcustomer', esc_sql($client));
			add_post_meta($post_id, 'date-debut', $date_debut);
			add_post_meta($post_id, 'id-annonce', $id_annonce);
			add_post_meta($post_id, 'id-support', $support);
			add_post_meta($post_id, 'etat', $statut);
			add_post_meta($post_id, 'profil', esc_sql($profil));
		}
		
function update_annonce(
			$post_id,$statut,$support,$secteur,$fonction,
			$region,$code_postal,$ville,$pays,$salaire_min,$salaire_max,$id_annonce,
			$profil,$client,$annonce,$contrat,$date_debut,$reference
		){
			// echo'update';
		
			$my_post = array(
			  'ID'           => $post_id,
			  'post_date' => date('Y-m-d H:i:s',time()),
			  'post_date_gmt' => date('Y-m-d H:i:s',time()),
			  'post_modified' => date('Y-m-d H:i:s',time()),
			  'post_modified_gmt' => date('Y-m-d H:i:s',time()),
			);
			wp_update_post( $my_post );

			update_post_meta($post_id, 'ref', $reference);
			update_post_meta($post_id, 'contrat', $contrat);
			update_post_meta($post_id, 'fonction', $fonction);
			update_post_meta($post_id, 'secteur', $secteur);
			update_post_meta($post_id, 'salary-min', $salaire_min);
			update_post_meta($post_id, 'salary-max', $salaire_max);
			update_post_meta($post_id, 'region', $region);
			update_post_meta($post_id, 'zip', $code_postal);
			update_post_meta($post_id, 'city', $ville);
			update_post_meta($post_id, 'pays', $pays);
			update_post_meta($post_id, 'descrassignement', $annonce);
			update_post_meta($post_id, 'descrcustomer', esc_sql($client));
			update_post_meta($post_id, 'date-debut', $date_debut);
			update_post_meta($post_id, 'id-annonce', $id_annonce);
			update_post_meta($post_id, 'id-support', $support);
			update_post_meta($post_id, 'etat', $statut);
			update_post_meta($post_id, 'profil', esc_sql($profil));
		}
?>