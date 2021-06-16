/**
 * 
 */
package org.sieca.everis.pdcc.model.manifiestoCarga;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class ManifiestoCargaValidarRq extends RequestBody{
	
	private String numeroManifiesto;
    private String codigoArancelario;
    private double pesoBrutoNacionalizado;
	/**
	 * 
	 */
	public ManifiestoCargaValidarRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the numeroManifiesto
	 */
	public String getNumeroManifiesto() {
		return numeroManifiesto;
	}
	/**
	 * @param numeroManifiesto the numeroManifiesto to set
	 */
	public void setNumeroManifiesto(String numeroManifiesto) {
		this.numeroManifiesto = numeroManifiesto;
	}
	/**
	 * @return the codigoArancelario
	 */
	public String getCodigoArancelario() {
		return codigoArancelario;
	}
	/**
	 * @param codigoArancelario the codigoArancelario to set
	 */
	public void setCodigoArancelario(String codigoArancelario) {
		this.codigoArancelario = codigoArancelario;
	}
	/**
	 * @return the pesoBrutoNacionalizado
	 */
	public double getPesoBrutoNacionalizado() {
		return pesoBrutoNacionalizado;
	}
	/**
	 * @param pesoBrutoNacionalizado the pesoBrutoNacionalizado to set
	 */
	public void setPesoBrutoNacionalizado(double pesoBrutoNacionalizado) {
		this.pesoBrutoNacionalizado = pesoBrutoNacionalizado;
	}
    
    

}
