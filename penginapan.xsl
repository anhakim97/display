<?xml version="1.0" encoding="ISO-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html>
    <body>
        <ol>
        <h2>KOST PUTRA</h2>
        <xsl:for-each select="penginapan/kost/kota/putra/kos">
            <div style="border:1px solid;padding:20px;width:50%">
                <li style="margin-top:10px;"><xsl:value-of select="@name"/></li>
                <ul>
                    <li>Alamat : <xsl:value-of select="alamat"/></li>
                    <li>Luas   : <xsl:value-of select="luas"/></li>
                    <li>Harga  : <xsl:value-of select="harga"/></li>
                    <li>Fasilitas : </li>
                    <ul>
                        <xsl:for-each select="fasilitaskamar/fasilitas">
                            <li><xsl:value-of select="@name"/> </li>
                        </xsl:for-each>
                    </ul>
                </ul>
            </div>
        </xsl:for-each>
        <h2>KOST PUTRI</h2>
        <xsl:for-each select="/penginapan/kost/kota/putri/kos">
            <div style="border:1px solid;padding:20px;width:50%">
                <li><xsl:value-of select="@name"/></li>
                <ul>
                    <li>Alamat : <xsl:value-of select="alamat"/></li>
                    <li>Luas   : <xsl:value-of select="luas"/></li>
                    <li>Harga  : <xsl:value-of select="harga"/></li>
                    <li>Fasilitas : </li>
                    <ul>
                        <xsl:for-each select="fasilitaskamar/fasilitas">
                            <li><xsl:value-of select="@name"/> </li>
                        </xsl:for-each>
                    </ul>
                </ul>
            </div>
        </xsl:for-each>
        </ol>
        <ol>
            <h2>WISMA</h2>
            <xsl:for-each select="//wisma">
                <div style="border:1px solid;padding:20px;width:50%">
                    <li><xsl:value-of select="@name"/></li>
                    <ul>
                        <li>Alamat : <xsl:value-of select="alamat"/></li>
                        <li>Luas   : <xsl:value-of select="luas"/></li>
                        <li>Harga  : <xsl:value-of select="harga"/></li>
                        <li>Fasilitas : </li>
                        <ul>
                            <xsl:for-each select="fasilitaskamar/fasilitas">
                                <li><xsl:value-of select="@name"/> </li>
                            </xsl:for-each>
                        </ul>
                    </ul>
                </div>
            </xsl:for-each>
        </ol>
        <ol>
            <h2>Hotel</h2>
            <xsl:for-each select="//hotel[position()>=1]">
                <div style="border:1px solid;padding:20px;width:50%">
                    <li><xsl:value-of select="@name"/></li>
                    <ul>
                        <li>Alamat : <xsl:value-of select="alamat"/></li>
                        <li>Luas   : <xsl:value-of select="luas"/></li>
                        <li>Harga  : <xsl:value-of select="harga"/></li>
                    </ul>
                </div>
            </xsl:for-each>
        </ol>
        <ol>
            <h2>Losmen</h2>
            <xsl:for-each select="//Losmen[harga>1000000]">
                <div style="border:1px solid;padding:20px;width:50%">
                    <li><xsl:value-of select="//Losmen/@name"/></li>
                    <ul>
                        <li>Harga  : <xsl:value-of select="harga"/></li>
                    </ul>
                </div>
            </xsl:for-each>
        </ol>
        <ol>
            <h2>Losmen nama Sae Sae</h2>
            <xsl:for-each select="//Losmen[@name='Sae Sae']">
                <div style="border:1px solid;padding:20px;width:50%">
                    <li><xsl:value-of select="@name"/></li>
                    <ul>
                        <li>Harga  : <xsl:value-of select="harga"/></li>
                    </ul>
                </div>
            </xsl:for-each>
        </ol>
        <ol>
            <h2>Losmen Dengan Harga Tertinggi</h2>
            <xsl:for-each select="//Losmen">
             <xsl:sort select="harga" order="descending"/>
                <div style="border:1px solid;padding:20px;width:50%">
                    <li><xsl:value-of select="@name"/></li>
                    <ul>
                        <li>Harga  : <xsl:value-of select="harga"/></li>
                    </ul>
                </div>
            </xsl:for-each>
        </ol>
        <ol>
            <h2>Apartemen Perhari</h2>
            <xsl:for-each select="//apartement">
                <xsl:if test="contains(harga,'hari')">
                <div style="border:1px solid;padding:20px;width:50%">
                    <li><xsl:value-of select="@name"/></li>
                    <ul>
                        <li>Alamat  : <xsl:value-of select="alamat"/></li>
                        <li>Tipe Unit  : <xsl:value-of select="tipeunit"/></li>
                        <li>Luas Unit  : <xsl:value-of select="luasunit"/></li>
                        <li>Kondisi Unit  : <xsl:value-of select="kondisiunit"/></li>
                        <li>Harga  : <xsl:value-of select="harga"/></li>
                    </ul>
                </div>
                </xsl:if>
            </xsl:for-each>
        </ol>
        <ol>
            <h2>Apartemen Indeks 3</h2>
            <xsl:for-each select="//apartement[3]">
                <div style="border:1px solid;padding:20px;width:50%">
                    <li><xsl:value-of select="@name"/></li>
                    <ul>
                        <li>Alamat  : <xsl:value-of select="alamat"/></li>
                        <li>Tipe Unit  : <xsl:value-of select="tipeunit"/></li>
                        <li>Luas Unit  : <xsl:value-of select="luasunit"/></li>
                        <li>Kondisi Unit  : <xsl:value-of select="kondisiunit"/></li>
                        <li>Harga  : <xsl:value-of select="harga"/></li>
                    </ul>
                </div>
            </xsl:for-each>
        </ol>
    </body>
</html>
</xsl:template>
</xsl:stylesheet>