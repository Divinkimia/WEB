using System;
using System.Collections.Generic;
using System.Linq;

namespace SUTOM
{
    class Program
    {
        static void Main(string[] args)
        {
            // List of words for the game
            List<string> words = new List<string>() { "fabricant", "farniente", "falsifier" };

            // Randomly choose a word
            Random random = new Random();
            string Secret = words[random.Next(words.Count)];

            // Initialize variables
            int attempts = 6;
            bool gameWon = false;
            List<char> guessedLetters = new List<char>();

            // Game loop
            while (attempts > 0 && !gameWon)
            {
                // Display the game state
                Console.WriteLine($"Attempts remaining: {attempts}");
                Console.Write("Enter a word starting with '{0}': ", secretWord[0]);

                // Get the user's guess
                string guess = Console.ReadLine().ToLower();

                // Validate the guess
                if (guess.Length != secretWord.Length || guess[0] != secretWord[0])
                {
                    Console.WriteLine("Invalid input. Please enter a valid word.");
                    continue;
                }

                // Check if the guess is correct
                if (guess == secretWord)
                {
                    gameWon = true;
                    Console.WriteLine("You win!");
                    break;
                }

                // Display the result of the guess
                Console.WriteLine("Result:");
                for (int i = 0; i < secretWord.Length; i++)
                {
                    if (guess[i] == secretWord[i])
                    {
                        Console.ForegroundColor = ConsoleColor.Green; // Green for correct letters
                        Console.Write(secretWord[i]);
                        Console.ResetColor();
                    }
                    else if (secretWord.Contains(guess[i]))
                    {
                        Console.ForegroundColor = ConsoleColor.Blue; // Blue for misplaced letters
                        Console.Write(guess[i]);
                        Console.ResetColor();
                 
                    }   
                }
            }
            
        }
    }

}                      