<?php

function echo_encode_decode($source_code)
{
    echo base64_encode($source_code);
    echo ("\n");
    //echo base64_decode(base64_encode($source_code));
}
 
echo_encode_decode("#include <bits/stdc++.h>
using namespace std;
int32_t main()
{
    int tc;
    cin >> tc;
    for (int i = 1; i <= tc; i++)
    {
        cout << \"case : \" << i << endl;
        int n;
        cin >> n;
        for (int i = 0; i < n; i++)
        {
            cout << \"AC\" << endl;
        }
    }

    return 0;
}");

echo_encode_decode("3
1 2 3");



echo_encode_decode("case : 1
AC
case : 2
AC
AC
case : 3
AC
AC
AC")

?>