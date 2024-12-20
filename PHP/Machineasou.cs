using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml.Serialization;

namespace Machine_a_soue
{
    internal class Program
    {
        static void Main(string[] args)
        {


            int jackpot = 100;
            int credits = 1;
            int choice = 0;

            string[] symbols = { "Coeur", "Cerise", "Fer à cheval", "banana", "voiture", "bic", "iron", "smart"};


            do
            {
                Consoel.clear();
                Console.WriteLine("Machine à sous");
                Console.WriteLine($"Montant du Jackpot : {jackpot}");
                Console.WriteLine($"Crédits : {credits}");
               


                Console.WriteLine("1 - Insérer une pièce");
                Console.WriteLine("2 - Jouer");
                Console.WriteLine("3 - Quitter");
               
                Console.Write("Entrez votre choix : ");
                choice = Convert.ToInt32(Console.ReadLine());
               


                switch (choice)
                {
                    case 1:

                        credits++;
                        break;

                    case 2:

                        if (credits > 0)
                        {
                            credits--;

                            Random random = new Random();
                            int symbol1 = random.Next(symbols.Length);
                            int symbol2 = random.Next(symbols.Length);
                            int symbol3 = random.Next(symbols.Length);


                            Console.WriteLine("|"+ symbols[symbol1] +"|" + symbols[symbol2] + "|"+ symbols[symbol3] +"|");


                            if (symbol1 == symbol2 && symbol2 == symbol3)
                            {
                                Console.WriteLine("Jackpot !");
                                jackpot += 100;
                                Console/readkey();
                            }
                            else
                            {
                                Console.WriteLine("Perdu !");
                            }
                        }
                        else
                        {
                            Console.WriteLine("Vous n'avez pas assez de crédits.");
                        }

                        break;
                       
                }

            } while (choice != 3);

           

           
                   
        }
    }
}