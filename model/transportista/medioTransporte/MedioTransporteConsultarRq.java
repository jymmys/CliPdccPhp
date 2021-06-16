/**
 * 
 */
package org.sieca.everis.pdcc.model.transportista.medioTransporte;

import org.sieca.everis.pdcc.model.util.RequestBody;

/**
 * @author ytorregl
 *
 */
public class MedioTransporteConsultarRq extends RequestBody{
	
    private String nroPlacaMedioTransporte;
    private String tipoMedioTransporte;
    private String pais;
	/**
	 * 
	 */
	public MedioTransporteConsultarRq() {
		super();
		// TODO Auto-generated constructor stub
	}
	/**
	 * @return the nroPlacaMedioTransporte
	 */
	public String getNroPlacaMedioTransporte() {
		return nroPlacaMedioTransporte;
	}
	/**
	 * @param nroPlacaMedioTransporte the nroPlacaMedioTransporte to set
	 */
	public void setNroPlacaMedioTransporte(String nroPlacaMedioTransporte) {
		this.nroPlacaMedioTransporte = nroPlacaMedioTransporte;
	}
	/**
	 * @return the tipoMedioTransporte
	 */
	public String getTipoMedioTransporte() {
		return tipoMedioTransporte;
	}
	/**
	 * @param tipoMedioTransporte the tipoMedioTransporte to set
	 */
	public void setTipoMedioTransporte(String tipoMedioTransporte) {
		this.tipoMedioTransporte = tipoMedioTransporte;
	}
	/**
	 * @return the pais
	 */
	public String getPais() {
		return pais;
	}
	/**
	 * @param pais the pais to set
	 */
	public void setPais(String pais) {
		this.pais = pais;
	}
    
    

}
