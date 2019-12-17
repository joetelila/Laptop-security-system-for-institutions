

#include <cstdlib>
#include <iostream>
#include<fstream>
using namespace std;

int main(int argc, char** argv) {

    fstream iostream;
    iostream.open("/poop.txt");
    iostream<<"This is Yohannes";
    iostream.close();
  
    return 0;
}

