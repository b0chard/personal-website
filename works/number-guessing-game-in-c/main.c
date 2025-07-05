#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main(){
  srand(time(NULL));

  int guess = 0;
  int tries = 0;
  int limit = 15;
  int min = 1;
  int max = 100;
  int answer = (rand() % (max - min + 1)) + min;

  printf("*** NUMBER GUESSING GAME ***\n");
  printf("You only have a limit of %d guesses!\n\n", limit);
  
  do{
    printf("Guess a number between %d-%d: ", min, max);
    scanf("%d", &guess);
    tries++;

    if(guess < answer){
      printf("Too low.\n");
    }else if(guess > answer){
      printf("Too high.\n");
    }else{
      printf("Correct!\n");
    }
  }while(guess != answer && tries != limit);

  if(guess != answer){
    printf("\nUh oh!! You haven't guessed the right number.");
  } else{
    printf("\nWow! You guessed that number right.");
  }

  printf("\nThe answer is %d.\n", answer);
  printf("It took you %d/%d of tries.\n", tries, limit);
  
  return 0;
}
