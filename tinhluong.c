#include <stdio.h>

int main() {
    int gv, gr;
    int ghc = 0;
    int gtc = 0;

    // ----- Ca sáng 8h - 12h -----
    if (gr > 8 && gv < 12) {
        if (gv <= 8 && gr >= 12) {
            ghc += 4;                     // đi đủ ca
        } else if (gv <= 8) {
            ghc += gr - 8;                 // vào sớm, ra sớm
        } else if (gr >= 12) {
            ghc += 12 - gv;                // vào muộn, ra muộn
        } else {
            ghc += gr - gv;                // vào muộn, ra sớm
        }
    }

    // ----- Ca chiều 13h - 17h -----
    if (gr > 13 && gv < 17) {
        if (gv <= 13 && gr >= 17) {
            ghc += 4;                      // đủ ca
        } else if (gv <= 13) {
            ghc += gr - 13;                // vào sớm, ra sớm
        } else if (gr >= 17) {
            ghc += 17 - gv;                // vào muộn, ra muộn
        } else {
            ghc += gr - gv;                // vào muộn, ra sớm
        }
    }

    // ----- Ca tối (tăng ca) 18h - 20h -----
    if (gr > 18 && gv < 20) {
        if (gv <= 18 && gr >= 20) {
            gtc += 2;                      // đủ ca
        } else if (gv <= 18) {
            gtc += gr - 18;                // vào sớm, ra sớm
        } else if (gr >= 20) {
            gtc += 20 - gv;                // vào muộn, ra muộn
        } else {
            gtc += gr - gv;                // vào muộn, ra sớm
        }
    }

    printf("Gio hanh chinh: %d\n", ghc);
    printf("Gio tang ca: %d\n", gtc);

    return 0;
}
