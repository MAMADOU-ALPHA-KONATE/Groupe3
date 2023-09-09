<?php
if (isset($_POST['generate_pdf'])) {
    // Assurez-vous d'inclure la bibliothèque FPDF
    require('fpdf/fpdf.php');

    // Récupérez les données du formulaire et traitez-les ici
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $profession = $_POST['profession'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // ... récupérez les autres données du formulaire

    // Créez une nouvelle instance PDF
    $pdf = new FPDF();
    $pdf->AddPage();

    // Définissez la police
    $pdf->SetFont('Arial', 'B', 14);

    // Ajoutez les informations du CV au PDF
    $pdf->Cell(0, 10, 'Curriculum Vitae', 0, 1, 'C');
    $pdf->SetFont('Arial', '', 12);
    $pdf->Cell(50, 10, 'Nom : ');
    $pdf->Cell(0, 10, $first_name . ' ' . $last_name, 0, 1);
    $pdf->Cell(50, 10, 'Profession : ');
    $pdf->Cell(0, 10, $profession, 0, 1);
    $pdf->Cell(50, 10, 'Email : ');
    $pdf->Cell(0, 10, $email, 0, 1);
    $pdf->Cell(50, 10, 'Numéro de téléphone : ');
    $pdf->Cell(0, 10, $phone, 0, 1);
    // ... ajoutez d'autres cellules pour les informations du CV

    // Générez le PDF et forcez le téléchargement
    $pdf->Output('D', 'CV_Etudiant.pdf');
} else {
    // Redirigez l'utilisateur vers le formulaire si le formulaire n'a pas été soumis
    header('Location: index.php');
    exit();
}
?>
