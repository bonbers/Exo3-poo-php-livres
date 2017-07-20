
class Livre {
  // Variables
  private String titre, auteur;
  private int nbPages;
  private double prix = -1.0;
  // C'est plus lisible que de laisser l'initialisation par défaut
  private boolean prixFixe = false;

    // Constructeurs
  public Livre(String unAuteur, String unTitre) {
    auteur = unAuteur;
    titre = unTitre;
  }

  public Livre(String unAuteur, String unTitre, int nbPages) {
    auteur = unAuteur;
    titre = unTitre;
    // l'appel au modificateur est plus sûr
    setNbPages(nbPages);
  }

  public Livre(String unAuteur, String unTitre, int nbPages, double prix) {
    auteur = unAuteur;
    titre = unTitre;
    // l'appel au modificateur est plus sûr
    setNbPages(nbPages);
    setPrix(prix);
  }

  // Accesseur
  public String getAuteur() {
    return auteur;
  }

  public String getTitre() {
    return titre;
  }

  public int getNbPages() {
    return nbPages;
  }

  public double getPrix() {
    return prix;
  }

  // Modificateur
  public void setAuteur(String unAuteur) {
    auteur = unAuteur;
  }

  public void setTitre(String unTitre) {
    titre = unTitre;
  }

  public void setNbPages(int n) {
    if (n > 0) {
      nbPages = n;
    }
    else {
      System.err.println("Erreur : nombre de pages négatif !");
    }
  }

  public void setPrix(double unPrix) {
    if (prixFixe) {
      System.err.println("Prix déjà fixé !");
    }
    else if (unPrix >= 0.0) {
      prix = unPrix;
      prixFixe = true;
    }
    else {
      System.err.println("Erreur : prix négatif !");
    }
  }

  public void afficheToi() {
    System.out.print(toString());
  }

  public String toString() {
    return
      "Livre [titre=" + titre + ",auteur=" + auteur + ",nbPages=" 
      + nbPages + "prixFixe=" + prixFixe + ",prix=" + prix + "]";
  }

  public int compare(Livre l) {
    // On a accès aux variables des autres livres
    // (protection d'accès par classe et pas par objet en Java)
    if (nbPages == l.nbPages) {
      return 0;
    }
    else if (nbPages > l.nbPages) {
      return +1;
    }
    else {
      return -1;
    }
  }

  public static int compare2(Livre l1, Livre l2) {
    // On a accès aux variables des autres livres
    // (protection d'accès par classe et pas par objet en Java)
    if (l1.nbPages == l2.nbPages) {
      return 0;
    }
    else if (l1.nbPages > l2.nbPages) {
      return +1;
    }
    else {
      return -1;
    }
  }

  public static void main(String[] args) {
    Livre l1 = new Livre("Victor Hugo", "Notre Dame de Paris", 150, 250.90);
    Livre l2 = new Livre("Emile Zola", "La bête humaine");
    l2.setNbPages(170);
    l1.setPrix(260.0); // on essaie une augmentation !
    System.out.println(l1);
    l2.setPrix(300.0); 
    l2.afficheToi();
    System.out.println();

    System.out.print("L'auteur du plus gros livre est ");
    String plusGros = "";
    switch(compare2(l1, l2)) {
    case 0 : 
      plusGros = "Personne";
      break;
    case 1: 
      plusGros = l1.getAuteur();
      break;
    case -1: 
      plusGros = l2.getAuteur();
    };
    System.out.print(plusGros);
  }
}
?>
